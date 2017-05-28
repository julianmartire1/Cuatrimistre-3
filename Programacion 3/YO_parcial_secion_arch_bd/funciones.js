function verificarUsuario()
{
    $.ajax({
            url: "verificar.php",
            type: "POST",
            data: "txtUser="+$("#txtUser").val()+"&txtPassword="+$("#txtPassword").val()+"&op=login",
            success: function(data)
            {
                if (data == "OK")
                {
                    alert("Ingreso correcto, redireccionando al menú de usuario...");
                    window.location.href="menu.php";
                }
                else
                {
                    alert("Datos incorrectos, intente nuevamente");
                }
            }
        })
}

function cerrarUsuario()
{
    $.ajax({
            url: "verificar.php",
            type: "POST",
            data: "op=logout",
            success: function(data)
            {
                if (data == "salir")
                {
                    alert("Sesión cerrada");
                    window.location.href="index.php";
                }
                else
                {
                    alert("Error al deslogearse, intente nuevamente");
                }
            }
        })
}

function actualizarDatos()
{
     $.ajax({
            url: "modificar.php",
            type: "POST",
            data: $("#form").serialize()+"&op=modificar",
            success: function(data)
            {
                /*if (data == "ok")
                {
                    alert("Datos correctamente actualizados");
                    window.location.href="menu.php";
                }
                else
                {
                    alert("Error al modificar, intente nuevamente");
                }*/

                alert(data);
            }
        })
}