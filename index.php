<?php
include './config.php';

/** Task 3: Ambil semua list */
$sql = ; /** Buat query untuk mendapatkan semua list */
$result = $conn->query($sql);
$lists = ; /** Ambil semua hasil query menggunakan fetch_all lalu ubah menjadi array asosiatif */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Todolist</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="w-4/5 sm:w-3/5 mx-auto mt-10">
      <h3 class="text-3xl md:text-4xl text-center font-bold mb-5">
        Todolist App
      </h3>
      <form action="./create.php" method="POST" class="flex space-x-4 mb-4">
        <input
          type="text"
          id="todo"
          name="todo"
          aria-describedby="helper-text-explanation"
          class="bg-gray-50 basis-3/4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          placeholder="Todo"
        />
        <button
          type="submit"
          class="text-white basis-1/4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        >
          Tambah Todo
        </button>
      </form>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3">Todo</th>
              <th scope="col" class="px-6 py-3">Status</th>
              <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($lists as $list): ?>
              <tr class="odd:bg-white even:bg-gray-50 border-b">
                <th
                  id="list-<?=$list['id']?>"
                  scope="row"
                  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap <?php echo $list['status'] > 0 ? 'line-through' : ''; ?>"
                >
                  <!-- Task 4: Menampilkan list -->
                </th>
                <td class="px-6 py-4">
                  <input
                    <?php echo $list['status'] > 0 ? 'checked' : ''; ?>
                    type="checkbox"
                    onchange="checkTodo(this)"
                    value="1"
                    data-list="<?=$list['id']?>"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                  />
                </td>
                <td class="px-6 py-4">
                  <a href="./delete.php?todo_id=<?=$list['id']?>" class="font-medium text-blue-600">Hapus</a>
                </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
