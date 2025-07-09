// resources/js/uploader.js
import Sortable from 'sortablejs';

export default class BracelogUploader {
	constructor({ inputId, previewId, videoId, overlayId, takePhotoId }) {
		this.input = document.getElementById(inputId);
		this.preview = document.getElementById(previewId);
		this.video = document.getElementById(videoId);
		this.overlay = document.getElementById(overlayId);
		this.takePhotoBtn = document.getElementById(takePhotoId);

		this.maxFiles = 10;
		this.maxSize = 2 * 1024 * 1024;
		this.images = [];

		this.init();
	}

	init() {
		if (!this.input || !this.preview || !this.video || !this.takePhotoBtn) return;

		this.input.addEventListener('change', this.handleFileUpload.bind(this));
		this.takePhotoBtn.addEventListener('click', this.handleTakePhoto.bind(this));
		this.initCamera();
		this.initSortable();
	}

	async initCamera() {
		try {
			const stream = await navigator.mediaDevices.getUserMedia({ video: true });
			this.video.srcObject = stream;
		} catch (err) {
			console.error('Camera access denied:', err);
		}
	}

	initSortable() {
		Sortable.create(this.preview, {
			animation: 150,
			onEnd: () => {
				const newOrder = [];
				const items = this.preview.querySelectorAll('img');
				items.forEach(img => newOrder.push(img.src));
				this.images = newOrder;
				this.renderImages();
			}
		});
	}

	handleFileUpload(e) {
		const files = Array.from(e.target.files);

		files.forEach(file => {
			if (!file.type.startsWith('image/')) return;
			if (file.size > this.maxSize) return alert(`${file.name} is too large`);
			if (this.images.length >= this.maxFiles) return alert('Maximum of 10 images allowed');

			const reader = new FileReader();
			reader.onload = (event) => this.addImage(event.target.result);
			reader.readAsDataURL(file);
		});
	}

	handleTakePhoto() {
		if (this.images.length >= this.maxFiles) return alert('Maximum of 10 images allowed');

		const canvas = document.createElement('canvas');
		canvas.width = this.video.videoWidth;
		canvas.height = this.video.videoHeight;
		const ctx = canvas.getContext('2d');
		ctx.drawImage(this.video, 0, 0);
		const dataUrl = canvas.toDataURL('image/jpeg');

		this.addImage(dataUrl);
	}

	addImage(src) {
		this.images.push(src);
		this.renderImages();

		// Update overlay to last image
		this.overlay.src = src;
		this.overlay.style.display = 'block';
		this.overlay.style.opacity = 0.5;
	}

	renderImages() {
		this.preview.innerHTML = '';

		this.images.forEach((src, index) => {
			const col = document.createElement('div');
			col.className = 'col';
			col.innerHTML = `
				<div class="card">
					<img src="${src}" class="card-img-top" alt="Uploaded image">
					<div class="card-footer text-center">
						<small>Photo ${index + 1}</small>
					</div>
				</div>
			`;
			this.preview.appendChild(col);
		});
	}
}
