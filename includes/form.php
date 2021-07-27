<main class="mt-4">

    <section>
        <a href="index.php">
            <button class="btn btn-success"><-</button>
        </a>
    </section>

    <div class="registration mt-4">
    
        <h2>Register a new job vacancy</h2>

        <form method="POST">

            <div class="form-group mt-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Type here what professional is your company looking for" required>
            </div>

            <div class="form-group mt-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="7" placeholder="Type in exactly what your company is looking for, what skills are expected, etc. Be thorough in this field." required></textarea>
            </div>

            <div class="form-group mt-3">

                <label for="status">Status:</label>
                
                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="active" value="y" checked>Active
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-control">
                            <input type="radio" name="active" value="n">Inactive
                        </label>
                    </div>
                
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success float-end m-2">Submit</button>
                <a href="index.php"><button type="button" class="btn btn-danger float-end m-2">Cancel</button></a>
            </div>

        </form>
    
    </div>

</main>