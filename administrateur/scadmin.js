/* ce script est en javascript ,il y a l'usage de ajax et jquery ,il fait la gestion des cliques sur les cases annuler ,update,delete,      
          validate 
ici on a utilisé sweetalert une forme plus développée que alert , il faut nécessairement inclure le fichier sweetalert.js 
pour pouvoir utiliser swal  */






$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){
			
        var el = this;
        var id = this.id;
        var splitid = id.split("_");
        
        // Delete id
        var deleteid = splitid[1];
       swal({ title: "Confirmation de Suppression ",
	   //pour faire un retour à la ligne dans text j'ai fait \n
     
	 text: "Etes-vous sûr de vouloir supprimer cet offre de stage ?\n cette action est irréversible...",
    
       buttons: true,
       dangerMode: true,
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
						   
           // AJAX Request           /* on a utilisé AJAX pour la suppression sans loading*/
        $.ajax({
            url: 'remove.php',
            type: 'POST',
            data: { id:deleteid },
            success: function(response){

                // Removing row from HTML Table
                $(el).closest('tr').css('background','tomato');
                $(el).closest('tr').fadeOut('slow', function(){      
                    $(this).remove();
                });
            }
        });
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });
     
    });
	
	
var firstCell=0;

    // Update
    $('.update').click(function(){ var firstCell=0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
           

			   firstCell = table.rows[rowIndex].cells[0].innerHTML;
              swal({ title: "Confirmation de la validation ",
             text: "Etes-vous sûr de vouloir valider cet offre de stage ?",
 
             buttons: true,
             
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
               	
                document.cookie = "firstCell="+firstCell;       
		        window.location = "update.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });   
		 

			 
});



var firstCell=0;

    // Valider
    $('.valider').click(function(){
		
		         var firstCell=0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
           

			   firstCell = table.rows[rowIndex].cells[0].innerHTML;
              swal({ title: "Confirmation de la validation ",
             text: "Etes-vous sûr de vouloir valider cet offre de stage ?",
 
             buttons: true,
             
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
               	
                document.cookie = "firstCell="+firstCell;       
		        window.location = "validate.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });   

			 
});
var firstCell=0;

    // Valider
    $('.approuver').click(function(){
		
		         var v =0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
				
             

			   v = table.rows[rowIndex].cells[0].innerHTML;
			    document.cookie = "v="+v;    
              swal({ title: "Confirmation de la validation ",
             text: "Etes-vous sûr de vouloir valider cet offre de stage ?",
 
             buttons: true,
             
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
               	
                   
		        window.location = "validate.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });   

			 
});

/* var firstCell=0;

    // Annuler
    $('.annuler').click(function(){if (confirm("Are you sure you want to not validate this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
           

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
           // alert(firstCell);
			
			

           //document.location.href="update.php";
		//  document.cookie = "firstCell="+firstCell;       /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		  //                                                     firstcell from jquery to php */
		 //  window.location = "annuler.php";
		
//}
		   

			/* 
});*/

// Annuler
   $('.annuler').click(function(){
	   var firstCell=0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
            // alert(rowIndex);

			   firstCell = table.rows[rowIndex].cells[0].innerHTML;
      swal({ title: "Confirmation de l'annulation ",
  text: "Etes-vous sûr de vouloir annuler cet offre de stage ?",
 
  buttons: true,
  dangerMode: true,
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
               	
                document.cookie = "firstCell="+firstCell;       
		        window.location = "annuler.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });


});



  /*  

    // Annuler
   $('.annuler').click(function(){
	   var firstCell=0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
            // alert(rowIndex);

			   firstCell = table.rows[rowIndex].cells[0].innerHTML;
      swal({
                title: 'Do you want to delete ?',
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                type: 'warning',
                buttonsStyling: false
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    //*on récupère la valeur de la premiere colonne de la ligne cliquée
               alert(firstCell);	
                document.cookie = "firstCell="+firstCell;       
		        window.location = "annuler.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });


});
*/
var firstCell=0;

    // Update
    $('.fiche').click(function(){
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
            

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
            
			
		   document.cookie = "firstCell="+firstCell;          /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                       firstcell from jquery to php */
		   window.location = "fiche.php";
		
}
		   

			 
);

});