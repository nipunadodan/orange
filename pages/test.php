<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </div>
        <div class="col-md-6">
            <h2 class="display-1">Display 1</h2>
            <h2 class="display-2">Display 2</h2>
            <h2 class="display-3">Display 3</h2>
            <h2 class="display-4">Display 4</h2>
            <h2 class="display-5">Display 5</h2>
            <h2 class="display-6">Display 6</h2>
        </div>
    </div>


    <form class="form" action="page.php" method="GET">
        <label for="textbox">Text Box</label><br>
        <input type="text" name="textbox"><br><br>
        <label for="password">Password Input</label><br>
        <input type="password" name="password"><br><br>
        <label for="textbox">Text Area</label><br>
        <textarea name="textarea"></textarea><br><br>
        <label for="dropdown">Dropdown</label><br>
        <select id="dropdown">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select><br><br>
        <label for="checkbox">Checkbox</label><br>
        <input type="checkbox" name="checkbox" id="check1"><label for="check1">check 1</label> <br><br>
        <label for="radio">Radio Select</label><br>
        <input type="radio" name="radio" id="radio1"><label for="radio1">radio 1</label>
        <input type="radio" name="radio" id="radio2"><label for="radio2">radio 2</label>
        <input type="radio" name="radio" id="radio3"><label for="radio3">radio 3</label><br><br>
        <label for="file">File</label><br>
        <input type="file" name="file"><br><br>
        <input type="submit" value="Submit Button" class="w-auto d-block px-3">
        <button type="button" class="btn btn-primary">Button</button>
        <button type="button" class="btn btn-info">Button</button>
        <button type="button" class="btn btn-warning">Button</button>
        <button type="button" class="btn btn-danger">Button</button>
    </form>
</div>