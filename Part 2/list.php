<?php
namespace Phppot;

$result = $userModel->getAllUser();
if (! empty($result)) {
    ?>
<table id='userTable'>
    <thead>
        <tr>
            <th>Count</th>
            <th>First Name</th>
            <th>Initial</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
    </thead>
<?php
    foreach ($result as $row) {
        ?>
                <tbody>
        <tr>
            <td><?php  echo $row['id']; ?></td>
            
            <td><?php  echo $row['firstName']; ?></td>
            <td><?php  echo $row['firstName'][0].'.'.$row['lastName'][0]; ?></td>
            <td><?php  echo $row['lastName']; ?></td>
            <td><?php  echo $row['age']; ?></td>
        </tr>
                    <?php
    }
    ?>
                </tbody>
</table>

<?php } ?>