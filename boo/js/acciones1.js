$(document).ready(function(){
    $("#btn_simple").click(function(){
        alert("Alerta por defecto");
    });
    
    $("#btn_aler1").click(function(){
        alertify.notify('Mensaje: Este un Alerta tipo notificacion success','success',3,function(){
            alertify.message('Este es un mensaje normal',2);
            alertify.success('Este es un mensaje de Success',0);
            alertify.error('Este es un mensaje de Error',0);
        });
    });

    $("#btn_aler2").click(function (){        				 			 
        alertify.alert('Deseas Continuar', 'Aceptar!', function(){
            alertify.success('Este fue un mensaje de Alerta');
        });
    });
    
    $("#btn_aler3").click(function(){
        alertify.prompt('Mensaje Temporal','Ingrese su nombre','Ej: Joel Espinoza', 
        function(evt,value){alertify.success('Ud. Ingreso: '+ value)},
        function(){ alertify.error('Cancelaste la Opercion')});
    });

    $("#btn_aler4").click(function(){
        alertify.confirm('Salir del Sistema','¿Desea Salir del Sistema?', function(){alertify.success('Saliendo del Sistema',2);
        },function(){alertify.error('Cancelaste la operacion',2)});
    });

    $("#btn_Not1").click(function(){
        swal("Titulo","Hola Programadores");
    });

    $("#btn_Not2").click(function(){
        swal("Advertencias",".....algo salio mal","warning");
    });

    $("#btn_Not3").click(function(){
        swal({
            title:"¿Esta seguro que quiere elimnar?",
            text: "Una vez que se elimine, ya no se prodra recuperar",
            icon: "warning",
            button: true,
            gangerMode: true,
        })
        .then((willDelete) => {
            if(willDelete){
                swal("El registro ha sido eliminado",{
                    icon: "success",
                });
            }else{
                swal("Operacion cancelada");     
            }
        });      
    });

    $("#btn_Not4").click(function(){
        swal("Ingrese un texto: ",{
            content: "input",
        })
        .then((value)=>{
            swal("Datos ingresados","Ud. ingreso o escribio: "+value,"success");
        });
    });
});