(async() => {const {value: sedes} = await Swal.fire({
	title:"#QuedateEnCasa!",
   text:"Realiza tu pedido Vía WhatsApp",
   
   // html:
	icon:"info",
   // confirmButtonText:
  
   footer:'<a class="iconify" href="https://www.ubereats.com/co/cali/food-delivery/milkshake-caney/S0qZHF5wQ7eYob8lbEhYqQ"  data-icon="simple-icons:ubereats" data-inline="false"></a>',
            
             
   
   // width:
   // padding:
   // background:
   // grow:
   backdrop:'true',
   // timer:
   // timerProgressBar:
   // toast:
   // position:
   allowOutsideClick:'true',
   allowEscapeKey:'true',
   allowEnterKey:'true',
   stopKeydownPropagation:'false',

	input:'select',
	inputPlaceholder:'Seleciona tu Sede',
    inputValue:'',
	inputOptions:{
		3174762749:'Milkshake Caney',
		3116451204:'Milkshake Av Roosvelt',
		
		3003892439:'Milkshake Palmira',
		3175380208:'Milkshake la 70',
		3008949222:'Milkshake Envigado',
		3148431060:'Milkshake Refugio',
		3153288100:'Milkshake la flora',
		3235921193:'Milkshake Andes (Sena)',
		3147366678:'Milkshake Calazans',
		3105926566:'Milkshake Bello',
		3183920423:'Milkshake Pereira',
		
      3044772517:'Milkshake Manizales',
      3136577270:'Milkshake Villa Colombia',
      3122170954:'Milkshake Floridablanca - Bucaramanga',
      3054855656:'Milkshake Barranquilla',
      3217579222:'San Antonio de Pereira - Antioquia',
      3043762197:'Milkshake Popayan',
      3202535138:'Milkshake Cerrito',
      3113957083:'Milkshake Garzón Huila',
      
      3023240003: 'Milkshake Itagui',
      3132509866: 'Duitama Boyacá',
      3116920160: 'Bogotá castilla', 
      3023240008: 'Bogotá suba',
      3227926158: 'Bogotá Usme',
      3148769286: 'Marsella Risaralda',
  

		},
	
   
   //  customClass:
   // 	container:
   // 	popup:
   // 	header:
   // 	title:
   // 	closeButton:
   // 	icon:
   // 	image:
   // 	content:
   // 	input:
   // 	actions:
   // 	confirmButton:
   // 	cancelButton:
   // 	footer:	

   // showConfirmButton:
   // confirmButtonColor:
   // confirmButtonAriaLabel:

    showCancelButton:true,
   cancelButtonText:'Cancelar',
    cancelButtonColor:'#cb3234',
    cancelButtonAriaLabel:'Cancelar',
   
    buttonsStyling:true,
    showCloseButton:true,
   closeButtonAriaLabel:'Cerrar Alerta',


   imageUrl:"img/mani2.jpg",
   imageWidth:'600px',
   // imageHeight:
    imageAlt:'Mega Snickers',

});
if (sedes){
	Swal.fire({
		title: `Whatsapp ${sedes}`,
		text:"Tu Sabor Favorito Hecho Malteada",
		icon:"info",
		footer:'Reserva Para Tus Fechas Especiales',
		
	});

	}	
})()




