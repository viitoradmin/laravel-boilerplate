
@if (session()->get('success'))
<script>
    toastr.options = {
        "closeButton": true,
    }
    toastr.success("{{session()->get('success')}}");
</script>
@elseif (session()->get('warning'))
<script>
    toastr.warning("{{session()->get('warning')}}");
</script>
@elseif (session()->get('info'))
<script>
    toastr.info("{{session()->get('info')}}");
</script>
@elseif (session()->get('error'))
<script>
    toastr.error("{{session()->get('error')}}");
</script>
@elseif (session()->get('message'))
<script>
    toastr.info("{{session()->get('info')}}");
</script>
@elseif (session()->get('status'))
<script>
    toastr.success("{{session()->get('status')}}");
</script>
@endif
