```javascript
// app.js

initConditionalForms: function (container) {
    var conditionalElementHandler = function (el) {
        var $el = $(el),
            closestSelector = $el.data('closest') || '.form-group',
            updateEl = $el.closest(closestSelector),
            relatedEl = container.find($el.data('visibleElement')),
            relatedElVal = $el.data('visibleValue'),
            reverse = $el.data('visibleReverse'),
            originallyDisabled = $el.prop('disabled');

        if (!updateEl.length) {
            updateEl = $el;
        }

        var updateElement = function () {
            var value = relatedEl.is(':checkbox,:radio') ? relatedEl.filter(':checked').val() : relatedEl.val();
            var hidden = Array.isArray(relatedElVal) ? (relatedElVal.indexOf(value) === -1) : (value != relatedElVal);
            if (reverse) {
                hidden = !hidden;
            }
            updateEl.toggleClass('hide', hidden);
            if (hidden) {
                $el.prop('disabled', true);
            } else if (!originallyDisabled) {
                $el.prop('disabled', false);
            }
        };
        relatedEl.on('change', updateElement);
        updateElement();
    };
    // get all elements which should be visible only on condition
    $('[data-visible-element]').each(function (idx, el) {
        conditionalElementHandler(el);
    });
}
,

```

```php
            ->add(
                $tab->add('hasCandidates'),
                CheckboxType::class,
                [
                    'required' => false,
                    'label' => 'Use Screener',
                    'attr' => [
                        'class' => 'beta',
                        'data-if' => "hasParticipants == 1" // ??
                        'data-visible-element' => '#Project_hasParticipants',
                        'data-visible-value' => '1',
                    ],
                    'help_block' => 'Screen study applicants',
                ]
            )
            ->add(
                $tab->add('hasParticipants'),
                CheckboxType::class,
                [
                    'required' => false,
                    'label' => 'Has Participants',
                    'help_block' => 'Study uses human subjects and collects personally identifiable information',
                ]
            );

```
