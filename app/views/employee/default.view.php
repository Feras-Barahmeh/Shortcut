<style>
    * {
        margin: 0;
        padding: 0;
        border: 0;
        outline: none;
        line-height: 1.3;
        font-size: 1em;
    }
    .wrapper {
        /*overflow: hidden;*/
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    form.add-employee {
        width: 500px;
        margin: 20px 50px 0 20px;
    }
    form.add-employee fieldset {
        padding: 10px;
        background-color: #1f1f1f1f;

        border: solid 1px #ececec;
    }
    form.add-employee fieldset legend {
        background-color: #abaaaa;
        padding: 5px;
        font: 1rem;
        color: rgb(87, 85, 85);
    }
    form.add-employee table {
        width: 100%;
    }
    form.add-employee label {
        font-size: .85em;
        color: #666666;
    }
    form.add-employee table tr td input[type="text"],
    form.add-employee table tr td input[type="number"]{
        width: 97%;
        padding: 2%;
    }
    form.add-employee table tr td input[type="submit"] {
        color: #e4e4e4;
        padding: 3px 6px;
        background-color: rgb(12, 173, 12);
        margin-top: 3px;
        border-radius: 3px;
    }
    form.add-employee table tr td input[type="submit"]:hover {
        cursor: pointer;
    }
    form.add-employee table tr td {
        padding: 3px 0px;
    }

    form.add-employee .massage {
        color: white;
        background-color: rgb(127, 226, 127);
        padding: 3px;
    }

    div.wrapper .employees table {
        width: 600px;
        margin: 20px 20px 0 0;
        border-collapse: collapse;
    }
    div.wrapper .employees table thead th  {
        text-align: left;
        background-color: #e4e4e4;
        font-weight: bold;
        font-size: 0.9em;
        font-family: bold;
        padding: 5px;
        border-right: solid 2px #929292;
        border-bottom: solid 2px #989898;
        color: #666;
    }
    div.wrapper .employees table thead th:last-child {
        border-right: none;
    }

    div.wrapper .employees table tbody td  {
        text-align: left;
        background-color: #fffafa;
        font-weight: bold;
        font-size: 0.9em;
        font-family: bold;
        padding: 5px;
        border: 1px solid #FFFF;
        color: #666;
    }
    div.wrapper .employees table tbody tr:nth-child(2n) td {
        background-color: #f1f1f1;
    }

</style>

<div class="wrapper">
    <!-- Show Employees -->
    <div class="employees">
        <table>
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
                            <td>
                                <a href="employee/edit/<?= $employee->id ?>">edit</a>
                                <a href="employee/delete/<?= $employee->id ?>">delete</a>
                            </td>

                        </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
        <a href="employee/add">Add Employee</a>
    </div>
</div>