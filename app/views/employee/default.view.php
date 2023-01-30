<h1 class="title-header">Employees</h1>

<div class="header-option flex">
    <a href="employee/add" class="mt-10">Add Employee</a>
</div>

<!-- Show Employees -->
    <div class="employees responsive-table mt-20" id="employees-table">
        <table class="">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Tax %</th>
                    <th>Controllers</th>
                </tr>
            </thead>

            <tbody>

                <?php

                    foreach ($employees as $employee ) {
                        ?>
                            <tr>
                                <td><?= $employee->name ?></td>
                                <td><?= $employee->age ?></td>
                                <td><?= $employee->address ?></td>
                                <td><?= $employee->salary ?></td>
                                <td><?= $employee->tax ?></td>
                                <td class="controller-btns">
                                    <a href="employee/edit/<?= $employee->id ?>"><i class="fas fa-edit"></i></a>
                                    <a href="employee/delete/<?= $employee->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-bell"  aria-hidden="true"></i></a>
                                </td>

                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
