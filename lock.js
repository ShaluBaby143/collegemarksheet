
<input class="form-control" name="fullname" value="<php echo $fullname; ?>" readonly/>
<button class="btn btn-primary" id="btnEdit" > edit </button>

    $(document).ready(function(){
        $('#btnEdit').click(function(){
            $("input[name='fullname']").attr("readonly", false);   
        });
    });
