<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data and Display in Table</title>
</head>

<body>
  <label for="search">Search:</label>
  <input type="text" id="search" placeholder="Enter username">
  <table id="data-table" border="1">
    <thead>
      <tr>
        <th>ID</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Gender</th>
        <!-- Add more columns as needed based on the data structure -->
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <script>
    async function getData() {
      let response = await fetch('../../constant/api.php');
      let data = await response.json();
      return data;
    }

    window.onload = () => {
      getData().then(data => {
        displayDataInTable(data);
      });
    };

    function displayDataInTable(data) {
      const tableBody = document.querySelector("#data-table tbody");
      tableBody.innerHTML = ''; // Clear existing rows

      const searchInput = document.getElementById("search");
      const searchTerm = searchInput.value.toLowerCase();

      data.forEach(item => {
        // Check if the search term matches the username
        if (item.nom.toLowerCase().includes(searchTerm) || item.prenom.toLowerCase().includes(searchTerm)) {
          const row = tableBody.insertRow();
          row.insertCell(0).textContent = item.id;
          row.insertCell(1).textContent = item.nom;
          row.insertCell(2).textContent = item.prenom;
          row.insertCell(3).textContent = item.email;
          row.insertCell(4).textContent = item.gender;

          // Create an img element for the avatar
          
        }
      });
    }
    
    // Attach an event listener to the search input to update the table on input change
    document.getElementById("search").addEventListener("input", () => {
      getData().then(data => {
        displayDataInTable(data);
      });
    });
  </script>
</body>

</html>
