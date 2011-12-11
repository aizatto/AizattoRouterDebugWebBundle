<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Router Debug</title>
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Method</th>
            <th>Pattern</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($routes as $name => $route): ?> 
            <tr>
              <td><?php echo $name; ?></td>
              <td><?php echo isset($requirements['_method']) ? strtoupper(is_array($requirements['_method']) ? implode(', ', $requirements['_method']) : $requirements['_method']) : 'ANY'; ?></td>
              <td><?php echo $route->getPattern(); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
