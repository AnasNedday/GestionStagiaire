$(document).ready(function(){

    // Delete 
    $('.delete').click(function(){if (confirm("Are you sure you want to delete this row?"))
			{
        var el = this;
        var id = this.id;
        var splitid = id.split("_");
        
        // Delete id
        var deleteid = splitid[1];
       
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
	
	});
var firstCell=0;

    // Update
    $('.update').click(function(){if (confirm("Are you sure you want to update this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
            // alert(rowIndex);

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
            alert(firstCell);
			//$( "#id" ).load( "update.php" );
			

           //document.location.href="update.php";
		   document.cookie = "firstCell="+firstCell;          /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                       firstcell from jquery to php */
		   window.location = "update.php";
		
}
		   

			 
});
var firstCell=0;

    // Update
    $('.fiche').click(function(){if (confirm("Are you sure you want to update this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
            

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
            alert(firstCell);
			
		   document.cookie = "firstCell="+firstCell;          /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                       firstcell from jquery to php */
		   window.location = "fiche.php";
		
}
		   

			 
});

var firstCell=0;

    // Valider
    $('.valider').click(function(){if (confirm("Are you sure you want to validate this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
            // alert(rowIndex);

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
            alert(firstCell);
			//$( "#id" ).load( "update.php" );
			

           //document.location.href="update.php";
		   document.cookie = "firstCell="+firstCell;          /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                       firstcell from jquery to php */
		   window.location = "demande.php";
		
}
		   
	   

			 

			 
});
var firstCell=0;

    // Valider
    $('.approuver').click(function(){
		
		         var v =0;	      
				 var row = $(this).closest('tr');
                 var rowIndex = $(this).closest('tr').index();
				
             alert(rowIndex);
             
			   v = table.rows[rowIndex].cells[0].innerHTML;
			   document.cookie = "v="+v;  
				 alert(v);
              swal({ title: "Confirmation de la validation ",
             text: "Etes-vous sûr de vouloir valider cet offre de stage ?",
 
             buttons: true,
             
            }).then(function (yes) {
                // Called if you click Yes.
                if (yes) {
				
                    /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
               	
                   
		        window.location = "validation.php";			   
          
                }
            },
            function (no) {
                // Called if you click No.
                if (no == 'cancel') {
                    swal('Cancelled', '', 'error');
                }
            });   

			 
});

});