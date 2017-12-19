<!-- Scripts -->
<script>
    var resizefunc = [];
</script>
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/detect.js') }}"></script>
<script src="{{ asset('admin/js/fastclick.js') }}"></script>
<script src="{{ asset('admin/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.js') }}"></script>
<!-- Modal-Effect -->
<script src="{{ asset('admin/plugins/custombox/dist/custombox.min.js') }}"></script>
<script src="{{ asset('admin/plugins/custombox/dist/legacy.min.js')}}"></script>

<!-- App js -->
<script src="{{ asset('admin/js/jquery.core.js') }}"></script>
<script src="{{ asset('admin/js/jquery.app.js') }}"></script>
<script src="{{ asset('admin/plugins/fileuploads/js/dropify.min.js')}}"></script>
<script type="text/javascript">
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong appended.'
        },
        error: {
            'fileSize': 'The file size is too big (1M max).'
        }
    });
</script>