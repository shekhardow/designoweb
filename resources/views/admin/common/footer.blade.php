<footer class="m-grid__item		m-footer ">
    <div class="m-container m-container--fluid m-container--full-height m-page__container">
        <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
    
        </div>
    </div>

    <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="model_wrapper_data"></div>
    </div>
    
</footer>
</div>		

<div id="m_scroll_top" class="m-scroll-top">
<i class="la la-arrow-up"></i>
</div>

		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="<?php echo url('public/tinymce/tinymce.min.js'); ?>"></script>
        <script src="<?php echo url('public/tinymce/editor.js'); ?>"></script>
		<script src="<?php echo url('public/assets/vendors/base/vendors.bundle.js')?>" type="text/javascript"></script>
		<script src="<?php echo url('public/assets/demo/default/base/scripts.bundle.js')?>" type="text/javascript"></script>
		<?php if(!empty($basic_datatable)){?>
			<script src="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.js')?>" type="text/javascript"></script>
			<script src='<?php echo url('public/assets/datatable/jquery.dataTables.min.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/dataTables.buttons.min.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/dataTables.bootstrap4.min.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/dataTables.responsive.min.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/responsive.bootstrap4.min.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/colreorder-custom.js') ?>'></script>
			<script src='<?php echo url('public/assets/datatable/dataTables.colReorder.min.js') ?>'></script>
			<script>
		</script>
		<?php }?>
		<?php if(!empty($export_datatable)){?>
			<script src="<?php echo url('public/assets/vendors/custom/datatables/datatables.bundle.js')?>" type="text/javascript"></script>
			<script src="<?php echo url('public/assets/demo/default/custom/crud/datatables/extensions/buttons.js')?>" type="text/javascript"></script>
		<?php }?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
		<script src="<?php echo url('public/assets/demo/default/custom/crud/forms/widgets/dropzone.js')?>" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo url('public/assets/vendors/dropify/dist/js/dropify.min.js')?>"></script>
		<script src="<?php echo url('public/assets/admin/js/event.js?v=1.1')?>" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js" integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $("#datatable").DataTable({
            responsive: true,
            destroy: true,
        });
    });
    $('.summernote').summernote({
        tabsize: 2,
        height: 300
    });
</script>
<script type="text/javascript">
    function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.getElementById(element).innerHTML+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    // Specify file name
    filename = filename?filename+'.doc':'document.doc';
    // Create download link element
    var downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = url;
        
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }    
    document.body.removeChild(downloadLink);
}
</script>
</body>

</html>

<script>
    $(document).on('click', '.addMore', function(){
       $(this).parents('.dimensionsGroup').find('.dimensions:last-child').clone(true).insertAfter($(this).parents('.dimensionsGroup').find('.dimensions:last-child'));
	   $(this).parents('.dimensionsGroup').find('.dimensions:last-child').find('.form-control').val('');
    });
	$(document).on('click', '.removeDimension', function(){
		$(this).parents('.dimensions').remove();
	})

	$(document).on('click', '.addMoreProjectChallenges', function(){
       $(this).parents('.projectChallengesGroup').find('.project_challenge:last-child').clone(true).insertAfter($(this).parents('.projectChallengesGroup').find('.project_challenge:last-child'));
	   $(this).parents('.projectChallengesGroup').find('.project_challenge:last-child').find('.form-control').val('');
    });
	$(document).on('click', '.removeProjectChallenge', function(){
		$(this).parents('.project_challenge').remove();
	})
</script>