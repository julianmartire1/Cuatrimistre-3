function logout()
    {
        $.ajax({
            url:"administrarphp.php",
            type: "POST",
            data: "op=salir",
            success: function(data)
            {
                
                window.location.href="index.php";
                alert(data);
            }
        })
    }

    function login()
    {
        $.ajax({
            url:"administrarphp.php",
            type: "POST",
            data: "txtEmail="+$("#txtEmail").val()+"&txtPass="+$("#txtPass").val()+"&op=iniciar",
            success: function(data)
            {
                if(data=="ok")
                {
                    // NUNCA PONER alert("Sesion Iniciada");
                    window.location.href="principal.php";
                    alert("Sesion Iniciada");
                }
                else alert("No se pudo  iniciar sesion");
            }
        })
    }

    function color()
    {
        $.ajax({
            url:"administrarphp.php",
            type: "POST",
            data: "color="+$("#color").val()+"&op=color",
            success: function(data)
            {
                alert(data);
                //document.body.style.backgroundColor=data;
            }
        })
        //document.body.style.backgroundColor=document.getElementById("color").value;
    }