/*
 * Las variables 'select' guardan una lista con los elementos seleccionados, generalmente la id del mismo.
 * Las variables 'listaSelect' guardan la misma lista como String. Su uso es simplemente para imprimir de forma más sencilla.
 */
var select = [];
var listaSelect= "";
var select2 = [];
var listaSelect2= "";
function seleccionar(id){
    listaSelect = "";
    if(select.indexOf(id) >= 0){
        //Se quita el valor del arreglo
        select.splice(select.indexOf(id),1);
        console.log("Item ya seleccionado que se eliminó ("+id+")");
    }else{
        //Se agrega el valor al arreglo
        if(select.length>0){
            select[select.length] = id;
        }else{
            select[0] = id;
        }   
    }
        for(var i= 0; i <= select.length-1; i++){
            listaSelect = listaSelect+'- "'+select[i]+'"'+"\n";
        }
    console.log("Hay "+(select.length)+" item(s) seleccionados\n"+listaSelect);
}
function seleccionar2(id){
    listaSelect2 = "";
    if(select2.indexOf(id) >= 0){
        //Se quita el valor del arreglo
        select2.splice(select2.indexOf(id),1);
        console.log("Item ya seleccionado que se eliminó ("+id+")");
    }else{
        //Se agrega el valor al arreglo
        if(select2.length>0){
            select2[select2.length] = id;
        }else{
            select2[0] = id;
        }   
    }
        for(var i= 0; i <= select2.length-1; i++){
            listaSelect2 = listaSelect2+'- "'+select2[i]+'"'+"\n";
        }
    console.log("Hay "+(select2.length)+" item(s) seleccionados\n"+listaSelect2);
}