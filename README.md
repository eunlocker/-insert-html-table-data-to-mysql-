# -insert-html-table-data-to-mysql-
insert html table data into mysql using php  and  javascript
You can select the required data one by one and save it
You can select all the required data using the check box in the header and save it at once

*To select all rows in the table by using the check box

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
  $('#chbheader').change(function () {
      $('tbody tr td input[type="checkbox"]').prop('checked', $(this).prop('checked'));
  });
  
  
  

