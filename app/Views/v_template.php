<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="/home"  class="btn btn-outline-primary">HOME</a>
                        <a href="/info"  class="btn btn-outline-primary">INFO</a>
                        <a href="/barang"  class="btn btn-outline-primary">barang</a>
                    </td>
                </tr>
                <tr class="body">
                    <td class="text-center">
                        <?= $this->renderSection('content') ?>
                    </td> 
                </tr>
                <tr class="footer">
                    <td class="text-center">Footer</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="/logout">logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#tablepage').DataTable();
      } );
    </script>
</body>
</html>