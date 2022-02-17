<?php

it('can export head partials', function () {
    $original = file_get_contents(__DIR__ . '/../resources/views/head.blade.php');
    $compiled = view('moyasar::head')->render();

    expect($compiled)->toBe($original);
});

it('can render init component', function () {
    $string = '<x-moyasar-init amount="100" />';
    $component = $this->blade($string);

    $output = "<script>
    Moyasar.init({
        // Required
        // Specify where to render the form
        // Can be a valid CSS selector and a reference to a DOM element
        element: .mysr-form,

        // Required
        // Amount in the smallest currency unit
        // For example:
        // 10 SAR = 10 * 100 Halalas
        // 10 KWD = 10 * 1000 Fils
        // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
        amount: 100,

        // Required
        // Currency of the payment transaction
        currency: USD,

        // Required
        // A small description of the current payment process
        description: default description,

        // Required
        publishable_api_key: ,

        // Required
        // This URL is used to redirect the user when payment process has completed
        // Payment can be either a success or a failure, which you need to verify on you system (We will show this in a couple of lines)
        callback_url: http://localhost/moyasar/thanks,

        // Optional
        // Required payments methods
        // Default: ['creditcard', 'applepay', 'stcpay']
        methods: [\"creditcard\",\"applepay\",\"stcpay\"],
    })
</script>
";
    expect($component->__toString())->toBe($output);
});
