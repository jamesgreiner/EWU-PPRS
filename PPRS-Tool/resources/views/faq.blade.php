@extends('layouts.format')
<!DOCTYPE html>
<html>
    <body>
        @section('content')
            <!-- heading for the FAQ page -->
            <div class="page-header">Frequently Asked Questions</div>

            <!-- question and answer -->
            <div class="faq-head">What is the Palouse Prairie Restoration Project?</div>
            <div class="faq-divider"></div>
            <p class="faq-body">
                Please visit the information tab for a more detailed look at what the project aims to accomplish.
            </p>

            <!-- question and answer -->
            <div class="faq-divider"></div>
            <div class="faq-head">Who can I get in touch with to inquire about the project?</div>
            <div class="faq-divider"></div>
            <p class="faq-body">
                You can visit the contact tab in the navigation menu. 
                There you will find contact information for the individuals involved in the project from each department.
            </p>

            <!-- question and answer -->
            <div class="faq-divider"></div>
            <div class="faq-head">How do I make changes to data that was submitted for a research project?</div>
            <div class="faq-divider"></div>
            <p class="faq-body">
                Any data submitted for a project can only be edited by the person who submitted it. 
                If you need to edit data that you submitted, please make sure you are logged into your account for this option to be available.
                Otherwise, please reach out to the faculty lead listed on the data you wanted to change.
            </p>

            <!-- question and answer -->
            <div class="faq-divider"></div>
            <div class="faq-head">How do I delete data that was submitted for a research project?</div>
            <div class="faq-divider"></div>
            <div class="content">
                <p class="faq-body">
                    To delete any data submitted for a project, you must have admin access. 
                    If you are a student researcher, please contact the biology department.
                </p>
            </div>

            <!-- question and answer -->
            <div class="faq-divider"></div>
            <div class="faq-head">How do I change my password?</div>
            <div class="faq-divider"></div>
            <p class="faq-body">
                To change your password, ensure that you are logged in to your account. Once logged in, navigate to the user dashboard and click on your name in the upper right-hand corner. 
                From there, you can select 'Profile' in the dropdown menu, and you will see a section that allows you to update your password.
            </p>

            <!-- question and answer -->
            <div class="faq-divider"></div>
            <div class="faq-head">Who should I contact if I'm running into problems with any part of the management tool?</div>
            <div class="faq-divider"></div>
            <p class="faq-body">
                If any 'bugs' or technical difficulties occur, please reach out to the current team leader responsible for building and maintaining this website.
                This information can be found under the 'Website and Databse Experience' section of the Contact page.
            </p>
            <div class="faq-divider"></div>

            <!-- script -->
            <script>
            var col = document.getElementsByClassName("faq_head");
            var i;
            for (i = 0; i < col.length; i++) 
            {
                col[i].addEventListener("click", function() 
                {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.maxHeight)
                    {
                        content.style.maxHeight = null;
                    } 
                    else 
                    {
                        content.style.maxHeight = content.scrollHeight + "px";
                    } 
                });
            }
            </script>
        @endsection
    </body>
</html>