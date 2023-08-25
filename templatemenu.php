<head>
  <style type="text/css">
      a{
        text-decoration: none;
        color: white;
      }
      .menu>td{
        background-color: red;
      }
      #menutable{
            width:95%;
           background-color: black;
            height: 40px; color: White;
             margin-bottom: 5px;
             border-radius: 10px;
      }
      button{
              margin-right: 10px; background-color:blueviolet; font-size: 40px;border-radius: 5px;
      }
  </style>
</head>
<table id="menutable">
  <tr class="menu">
    <td > <a href="index.php">Home</a> </td>
    <td align="right">
      <button>
        <a href="edit.php">Edit</a> ||
        <a href="#" onclick="permis()">Erase All</a>
      </button>
    </td>
  </tr>
</table>
<script type="text/javascript">
  function permis() {
    if (confirm("Do you want to delete?.")) {
      window.location="erase.php";
    }
    
  }
</script>