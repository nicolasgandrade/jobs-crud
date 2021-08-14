<?php

    $results = '';
    foreach($vacancies as $vacancy){
        $results .='<tr>                        
                        <td>'.$vacancy->title.'</td>
                        <td>'.$vacancy->description.'</td>
                        <td>'.($vacancy->active == "y" ? "Ativo" : "Inativo").'</td>
                        <td>'.date('d/m/Y à\s H:i', strtotime($vacancy->date)).'</td>
                        <td>
                            <a href="edit.php?id='.$vacancy->id.'><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="remove.php?id='.$vacancy->id.'><button type="button" class="btn btn-danger">Remove</button></a>
                        </td>
                    </tr>';
    }

?>


<main class="mt-4">

    <section>
        <a href="register.php">
            <button class="btn btn-success">Add vacancy</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?=$results?>
            </tbody>
        </table>

    </section>

</main>