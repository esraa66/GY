"use strict";
// Class definition

var KTCkeditor = function () {    
    // Private functions
    var demos = function () {
        ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-1' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.error( error );
			} );

		ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-2' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );

		ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-3' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );

		ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-4' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );

		ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-5' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );
    ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-6' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );
    ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-7' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.error( error );
			} );
    ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-8' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );
    ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-9' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );
    ClassicEditor
			.create( document.querySelector( '#kt-ckeditor-10' ) )
			.then( editor => {
				console.log( editor );
			} )
			.catch( error => {
				// console.log( error );
			} );
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTCkeditor.init();
});
