<script>
$(document).ready(function() {
    var nameValidators = {
            row: '.col-xs-3',   // The title is placed inside a <div class="col-xs-4"> element
            validators: {
                notEmpty: {
                    message: 'Name is required'
                }
            }
        },
        phnValidators = {
            row: '.col-xs-3',
            validators: {
                notEmpty: {
                    message: 'Phone number is required'
                }
            }
        },
        emailValidators = {
            row: '.col-xs-3',
            validators: {
                notEmpty: {
                    message: 'Email is required'
                }
            }
        },
        eventIndex = 0;

    $('#eventform')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'event[0].name': titleValidators,
                'event[0].phn': isbnValidators,
                'event[0].email': priceValidators
            }
        })

        // Add button click handler
        .on('click', '.addButton', function() {
            eventIndex++;
            var $template = $('#eventTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', eventIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="title"]').attr('name', 'book[' + bookIndex + '].title').end()
                .find('[name="isbn"]').attr('name', 'book[' + bookIndex + '].isbn').end()
                .find('[name="price"]').attr('name', 'book[' + bookIndex + '].price').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#bookForm')
                .formValidation('addField', 'book[' + eventIndex + '].name', nameValidators)
                .formValidation('addField', 'book[' + eventIndex + '].phn', phnValidators)
                .formValidation('addField', 'book[' + eventIndex + '].price', emailValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#eventform')
                .formValidation('removeField', $row.find('[name="event[' + index + '].name"]'))
                .formValidation('removeField', $row.find('[name="event[' + index + '].phn"]'))
                .formValidation('removeField', $row.find('[name="event[' + index + '].email"]'));

            // Remove element containing the fields
            $row.remove();
        });
});
</script>