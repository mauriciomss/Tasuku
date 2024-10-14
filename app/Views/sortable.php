<!DOCTYPE html><html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Connect lists</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #sortable1, #sortable2 {
    border: 1px solid #eee;
    width: 142px;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 120px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable",

    update: function () {
        var order1 = $('#sortable1').sortable('toArray').toString();
        var order2 = $('#sortable2').sortable('toArray').toString();

        alert("Order 1:" + order1 + "\n Order 2:" + order2); 
    }

      /*receive: function(event, ui) {
        alert("dropped on = "+this.id); // Where the item is dropped
        alert("sender = "+ui.sender[0].id); // Where it came from
        alert("item = "+ui.item[0].id); //Which item (or ui.item[0].id)
        //alert( $('#'+this.id).sortable('toArray').toString() );
      } ,
      update: function(event, ui) {
        if($('#'+this.id).sortable('toArray').toString()) {
            alert( "Orden: " + $('#'+this.id).sortable('toArray').toString() );
        }
      }
      */        
    }).disableSelection();
  } );
  </script>
</head>
<body>
 
<ul id="sortable1" class="connectedSortable">
  <li class="ui-state-default" id='item1'>Item 1</li>
  <li class="ui-state-default" id='item2'>Item 2</li>
  <li class="ui-state-default" id='item3'>Item 3</li>
  <li class="ui-state-default" id='item4'>Item 4</li>
  <li class="ui-state-default" id='item5'>Item 5</li>
</ul>
 
<ul id="sortable2" class="connectedSortable">
  <li class="ui-state-highlight" id='item6'>Item 6</li>
  <li class="ui-state-highlight" id='item7'>Item 7</li>
  <li class="ui-state-highlight" id='item8'>Item 8</li>
  <li class="ui-state-highlight" id='item9'>Item 9</li>
  <li class="ui-state-highlight" id='item10'>Item 10</li>
</ul>
 
 
 
 
</body></html>