var n=1;
function ajouter(){
    console.log('ajout ligne',n);
    var el = "<tr id=\"t"+n+"\"><td><input type=\"text\" "+
    " value=\""+n+"\"  name=\"t["+n+"][name]\" />" +
     "</td><td><a href=\"#\" onclick=\"supprimer("+n+")\">Supprimer</a></td></tr>";
    $('#tbl').append(el);
    n++;
}

function supprimer(index){
    var i = parseInt(index);
    console.log('supprimer ligne ',i);
    $('#t'+i).remove();
}

function supall(){
     $('#tbl tr:last').remove();
}
function rechercher(){
     var nr=$('#rech').val();
     $('input[value="'+nr+'"]').css('background','#e20000');
}

$(function(){
   $('#tbl tr:even').css('background','#e20000');
});