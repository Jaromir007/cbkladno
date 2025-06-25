<?php 
/**
 * Template Name: Homepage
 * @package cbkladno
 * @since 1.0
 */
?>

<?php get_header(); ?>
<div class="style-demo">
    <h1>Heading 1 (h1)</h1>
    <h2>Heading 2 (h2)</h2>
    <h3>Heading 3 (h3)</h3>
    <h4>Heading 4 (h4)</h4>
    <h5>Heading 5 (h5)</h5>
    <h6>Heading 6 (h6)</h6>

    <p>This is a paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="#">This is a link (a)</a>

    <button type="button">Button element</button>
    <input type="button" value="Input Button">
    <input type="submit" value="Input Submit">
    <input type="reset" value="Input Reset">

    <form>
        <label for="input-text">Text Input:</label>
        <input type="text" id="input-text" placeholder="Text input">

        <label for="input-email">Email Input:</label>
        <input type="email" id="input-email" placeholder="Email input">

        <label for="input-password">Password Input:</label>
        <input type="password" id="input-password" placeholder="Password input">

        <label for="select-demo">Select:</label>
        <select id="select-demo">
            <option>Option 1</option>
            <option>Option 2</option>
        </select>

        <label>
            <input type="checkbox"> Checkbox
        </label>
        <label>
            <input type="radio" name="radio-demo"> Radio 1
        </label>
        <label>
            <input type="radio" name="radio-demo"> Radio 2
        </label>
        <textarea placeholder="Textarea"></textarea>
    </form>

    <ul>
        <li>Unordered list item 1</li>
        <li>Unordered list item 2</li>
    </ul>
    <ol>
        <li>Ordered list item 1</li>
        <li>Ordered list item 2</li>
    </ol>
    <table>
        <thead>
            <tr>
                <th>Table Head 1</th>
                <th>Table Head 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Table Data 1</td>
                <td>Table Data 2</td>
            </tr>
            <tr>
                <td>Table Data 3</td>
                <td>Table Data 4</td>
            </tr>
        </tbody>
    </table>

    <blockquote>
        This is a blockquote. Lorem ipsum dolor sit amet.
    </blockquote>

</div>
<?php get_footer(); ?>