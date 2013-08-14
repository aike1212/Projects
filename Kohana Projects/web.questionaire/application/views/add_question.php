<script type="text/javascript">
    function location_selector(questionnaire_id)
    {
        var select = document.getElementById("drpdwn");

        if (document.getElementById(questionnaire_id).value == "request_a_quote")
        {
            document.getElementById("basic").disabled = false;
            document.getElementById("need").disabled = false;
            document.getElementById("brand").disabled = true;
            document.getElementById("design").disabled = true;
            document.getElementById("content").disabled = true;
            document.getElementById("pressence").disabled = true;
            document.getElementById("any").disabled = true;
        }
        else if (document.getElementById(questionnaire_id).value == "client_project_planner")
        {
            document.getElementById("basic").disabled = true;
            document.getElementById("need").disabled = true;
            document.getElementById("brand").disabled = false;
            document.getElementById("design").disabled = false;
            document.getElementById("content").disabled = false;
            document.getElementById("pressence").disabled = false;
            document.getElementById("any").disabled = false;
        }
        else
        {
            document.getElementById("basic").disabled = false;
            document.getElementById("need").disabled = false;
            document.getElementById("brand").disabled = false;
            document.getElementById("design").disabled = false;
            document.getElementById("content").disabled = false;
            document.getElementById("pressence").disabled = false;
            document.getElementById("any").disabled = false;
        }
    }
</script>


<div id="add_question">

    <?if ($this->input->post()) {?>
        <div id="errors">
            <? $errors = $this->session->get_once("message")?>
            <?foreach($errors as $error) {?>
                <?=$error . "<br />"?>
            <?}?>
        </div>
    <?}?>

    <h2>
        Administrator Page
        <?=html::anchor('admin_logout', 'Logout', array('class' => 'right'))?>
        <span class="right">Welcome  <?=$this->session->get("logged_in_user")?></span>
    </h2>

    <ul>
        <li><?=html::anchor("admin_page", "Admin Home")?></li>
        <li><?=html::anchor('admin_page/view_question', 'View Questions')?></li>
        <li class="active"><?=html::anchor('admin_page/add_question', 'Add a Question')?></li>
    </ul>

    <form method="post" action="">
        <fieldset>
            <?=form::label('question', "Enter your question <br />")?>
            <?=form::textarea('add_question', $this->input->post('add_question'), 'rows="5" cols="90"')?>
            <br />

            <p> ** Select a Questionnaire ** </p>
            <br />
            <?=form::label('questionnaire', 'Questionnaire')?>
            <?//=form::dropdown('questionnaire_choice', $questionnaire_choice)?>
            <select id="questionnaire_choice" name="questionnaire_choice" onChange="location_selector('questionnaire_choice')">
                <option value=""></option>
                <option value="request_a_quote">Request A Quote</option>
                <option value="client_project_planner">Creative Brief Questionnaire</option>
            </select>
            <br />

            <p> ** Select a Location ** </p>
            <br />
            <?=form::label('location', 'Location')?>
            <?//=form::dropdown('location_choice', $request_choice)?>
            <select id="drpdwn">
                <option value=""></option>
                <option id="basic" value="basic">The Basics</option>
                <option id="need" value="need">What You Need</option>
                <option id="brand" value="brand">The Brand</option>
                <option id="design" value="design">The Design</option>
                <option id="content" value="content">The Content</option>
                <option id="pressence" value="pressence">The Online Pressence</option>
                <option id="any" value="any">Anything Else</option>
            </select>
            <br />

            <?=form::submit('save', 'Save', 'class="right save"')?>
        </fieldset>
    </form>

</div>