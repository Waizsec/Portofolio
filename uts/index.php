<?php
$url = 'https://wisnudanu.alwaysdata.net/uts/getcsv2json.php';
$json_data = file_get_contents($url);
ini_set('auto_detect_line_endings', true);
$data = json_decode($json_data, true);
$dataReversed = array_reverse($data);
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
                        hitam: "#272829"
                    },
                },
            },
        }
    </script>

</head>
<body class="bg-abu flex px-10">
    <div class="w-2/6 mx-auto bg-white p-5 rounded-md shadow-md mr-10 h-screen fixed top-6">
        <h1 class="text-2xl font-semibold mb-4">Tambahkan Data</h1>
        <form action="https://wisnudanu.alwaysdata.net/uts/insertdata.php" method="post">
            <input type="hidden" name="csv_url" value="datapribadi.csv">
                <div class="flex flex-wrap -mx-5 mb-4">
                    <div class="w-1/2 px-5 mb-4">
                        <label for="id" class="block text-gray-700 font-medium">Id</label>
                        <input type="text" id="id" name="id" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="w-1/2 px-5 mb-4">
                        <label for="f_name" class="block text-gray-700 font-medium">F_Name</label>
                        <input type="text" id="f_name" name="f_name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="w-1/2 px-5 mb-4">
                        <label for="l_name" class="block text-gray-700 font-medium">L_Name</label>
                        <input type="text" id="l_name" name="l_name" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="w-1/2 px-5 mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="w-1/2 px-5 mb-4">
                        <label for="email2" class="block text-gray-700 font-medium">Email2</label>
                        <input type="email" id="email2" name="email2" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>

                    <div class="w-1/2 px-5 mb-6">
                        <label for="profesi" class="block text-gray-700 font-medium">Profesi</label>
                        <input type="text" id="profesi" name="profesi" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                </div>

            <button type="submit" class="w-full bg-hitam text-white font-semibold px-4 py-2 rounded-md">Submit</button>
        </form>
    </div>
    <div class="w-2/6 mr-16"></div>


    <div class="w-4/6 h-screen overflow-hidden pt-6">
        <div class="flex justify-center w-full overflow-scroll h-screen">
            <table class="w-full text-center">
                <thead class="bg-hitam text-white w-full" style="position: sticky; top: 0; z-index: 1;">
                    <tr class="h-16 w-1/2">
                        <th>ID</th>
                        <th>F_Name</th>
                        <th>L_Name</th>
                        <th>Email</th>
                        <th>Email2</th>
                        <th>Profesi</th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    <?php
                    foreach ($dataReversed as $row) {
                        echo '<tr>';
                        foreach ($row as $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
