/**
 *  Modules 
 * 
 * */
import 'bootstrap';
import BracelogUploader from './modules/bracelogUploader.js';

document.addEventListener('DOMContentLoaded', () => {
	const uploader = new BracelogUploader({
		inputId: 'image-upload',
		previewId: 'image-preview',
		videoId: 'camera-stream',
		overlayId: 'overlay-image',
		takePhotoId: 'take-photo',
	});
});