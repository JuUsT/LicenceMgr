$(function() {
    /*	
    $("#cmdAddUser").on("click",function()
        {   
            $.ajax({
                url: "/company/companies/",
                success: function(data)
                {
                    var dest = $("#program_parent_id");

                    dest.html("");
                    dest.append('<option value="'+this.id+'">Valeur VIDE</option>');
                    $(data).each(function()
                                 {
                                     dest.append('<option value="'+this.id+'">'+this.name+'</option>');
                                 });
                },
                dataType: "json"
            });
        });*/

    /*
    $("#loginForm").on("click", ".cmdLog", function() {
        saveForm($(this).closest('#loginForm'), '/auth/login',null,function(){
            var dest = $(".loginDiv");
            if(dest.html().indexOf("Mauvaises informations de login") <= -1)
            {
                dest.append('<small class="error">Mauvaises informations de login</small>');    
            }
        });
    });
*/

    $("#mainModal").on("click", ".cmdAddUser", function() {
      
        var data = dataFromForm($(this).closest('.reveal-modal'));
        console.log(data);
        if(data['password'] == data['passwordConfirm'])
        {
            saveForm($("#addUserDiv"), '/auth/add',null,function(){
                var dest = $("#error");
                if(dest.html().indexOf("Oublie d'informations de création") <= -1)
                {
                    dest.append('<small class="error">Oublie d\'informations de création</small>');    
                }
            });
        }
        else
        {
            var dest = $("#error");
            if(dest.html().indexOf("Oublie d'informations de création") <= -1)
            {
                dest.append('<small class="error">Mot de passe non similaire</small>');    
            }
        }
    });

});