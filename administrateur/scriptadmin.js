/* ce script est en javascript ,il y a l'usage de ajax et jquery ,il fait la gestion des cliques sur les cases annuler ,update,delete,validate 
ici on a utilisé la forme standard de alert en javascript */










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
		   window.location = "validate.php";
		
}
		   

			 
});

 var firstCell=0;

    // Annuler
    $('.annuler').click(function(){if (confirm("Are you sure you want to not validate this row?"))
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
           

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
          alert(firstCell);
			
			

          
		  document.cookie = "firstCell="+firstCell;       /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                      firstcell from jquery to php */
		   window.location = "annuler.php";
		
}
		   

			 
});


var firstCell=0;

    // Annuler
    $('.annuler').click(function(){ swal {
      title: 'Are you sure?'
      text: 'You will not be able to recover this imaginary file!'
      type: 'warning'
      showCancelButton: true
      confirmButtonColor: '#DD6B55'
      confirmButtonText: 'Yes, delete it!'
      cancelButtonText: 'No, cancel plx!'
      closeOnConfirm: false
      closeOnCancel: false
    }, (confirmed) =>
      if confirmed)
			{
					
			 var row = $(this).closest('tr');
             var rowIndex = $(this).closest('tr').index();
           

			firstCell = table.rows[rowIndex].cells[0].innerHTML;   /*on récupère la valeur de la premiere colonne de la ligne cliquée*/
            alert(firstCell);
			
			

           //document.location.href="update.php";
		   document.cookie = "firstCell="+firstCell;          /* on a utilisé un cookie pour passer la valeur de la variable 
		   
		                                                       firstcell from jquery to php */
		   window.location = "annuler.php";
		
}
		   

			 
});






});