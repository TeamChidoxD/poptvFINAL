<script type="text/javascript">
$(document).ready(function(){
    $('#registrar').click(function(){
        var datos=$('#frmajax').serialize();
        $.ajax({
            type:"POST",
            url:"insertar.php",
            data:datos,
            success:function(r){
                if(r==1){
                    alert("Registro Exitoso");
                }else{
                    alert("Fallo el registro");
                }
            }
        });
        return false;
    })
});
</script>