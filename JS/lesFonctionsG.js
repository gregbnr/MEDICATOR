function ModifierLaRegion()
{
    $.ajax
    (
        {
                type:"post",
                url:"ModifierUneRegion",
                data: "nomregion="+$('#nomRegion').val()+"&idRegion="+$('#idRegion').val(),
                success:function(data)
                {
                    $('#divR').empty();
                    $('#divR').append(data);
                },
                error:function()
                {
                    //alert($('#nomRegion').val());
                    alert('Erreur pendant la modication!');
                   // alert($('#txt1').val()+" "+$('#lstTypes option:selected').val());
                }
        }
    );
}

function InsererLesVisiteurs()
{
    $.ajax
    (
        {
                type:"post",
                url:"InsertionVisiteur",
                data: "matricule="+$('#txtMatricule').val()+"&nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&adresse="+$('#txtAdresse').val()+"&cp="+$('#txtCP').val()+"&ville="+$('#txtVille').val()+"&dateE="+$('#txtDateE').val()+"&codeSec="+$('#txtCodeSec').val()+"&codeLabo="+$('#txtCodeLabo').val(),
                success:function(data)
                {
                    $('#divV').empty();
                    $('#divV').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
}


function ModifierLesVisiteurs(){
    
    $.ajax
    (
        {
                type:"post",
                url:"ModificationVisiteur",
                data: "nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&adresse="+$('#txtAdresse').val()+"&cp="+$('#txtCP').val()+"&ville="+$('#txtVille').val()+"&dateE="+$('#txtDateE').val()+"&codeSec="+$('#txtCodeSec').val()+"&codeLabo="+$('#txtCodeLabo').val()+"&idVisiteur="+$('#txtMatricule').val(),
                success:function(data)
                {
                    $('#divM').empty();
                    $('#divM').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour modifier!');
                   
                }
        }
    );
    
    
}


function InsererUnTravailleur(){
    
    
    $.ajax
    (
        {
                type:"post",
                url:"InsertionTravailleur",
                data: "matriculeT="+$('#lstVis option:selected').val()+"&dateT="+$('#lstVis option:selected').attr('name')+"&codeRegT="+$('#lstReg option:selected').val()+"&commentaireT="+$('#textareaT').val(),
                success:function(data)
                {
                    $('#divT').empty();
                    $('#divT').append(data);
                },
                error:function()
                {
                    
                    alert('Erreur pour insérer!');
                   
                }
        }
    );
    
    
    
    
}