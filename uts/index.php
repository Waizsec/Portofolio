<?php 
    require_once 'getcsv2json.php';
    $displaydata = $jsonData;
    if (isset($_GET['search'])) {
        $searchTerm = $_GET['search'];
    }
    if (isset($_GET['entri'])) {
        $displaydata = [];
       for ($i=0; $i < $_GET['entri'] ; $i++) { 
         array_push($displaydata, $jsonData[$i]);
       }
    }
    // dd($jsonData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS - 162112133115 - I Ketut Andika Wisnu Danuarta</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              abu: "#D8D9DA",
              hitam : "#272829"
            },
          },
        },
      }
    </script>
</head>
<body>
    <div class="flex flex-col p-2 items-center justify-center bg-abu">
        <div class="w-4/6 flex justify-between h-36 items-center font-bold">
            <form action="" method="get" class="flex">
                <p>Tampilkan : </p>
                <input type="number" class="w-12 ml-6" value="<?php  if (isset($_GET['entri'])) { echo $_GET['entri']; }else{ echo 0;} ?>" min="1" name="entri" id="entri">
                <p class="ml-6">Entri</p>
            </form>
            <form action="" method="get" class="flex">
                <p>Cari : </p>
                <input type="text" class="ml-6" placeholder="ketik disini.." name="search" id="search">
            </form>
        </div>
        <table class="w-4/6 text-center mt-4 ">
            <thead class="bg-hitam text-white ">
                <tr class="h-16">
                    <th>ID</th>
                    <th>F_Name</th>
                    <th>L_Name</th>
                    <th>Email</th>
                    <th>email2</th>
                    <th>profesi</th>
                </tr>
            </thead>
            <tbody>
                <?php  foreach($displaydata as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['F_Name']; ?></td>
                    <td><?= $item['L_Name']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['email2']; ?></td>
                    <td><?= $item['profesi']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>