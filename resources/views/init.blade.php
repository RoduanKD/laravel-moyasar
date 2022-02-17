<script>
    Moyasar.init({
        // Required
        // Specify where to render the form
        // Can be a valid CSS selector and a reference to a DOM element
        element: {{ $element ?? config('moyasar.element') }},

        // Required
        // Amount in the smallest currency unit
        // For example:
        // 10 SAR = 10 * 100 Halalas
        // 10 KWD = 10 * 1000 Fils
        // 10 JPY = 10 JPY (Japanese Yen does not have fractions)
        amount: {{ $amount }},

        // Required
        // Currency of the payment transaction
        currency: {{ $currency ?? config('moyasar.currency') }},

        // Required
        // A small description of the current payment process
        description: {{ $description ?? config('moyasar.description') }},

        // Required
        publishable_api_key: {{ config('moyasar.publishable_api_key') }},

        // Required
        // This URL is used to redirect the user when payment process has completed
        // Payment can be either a success or a failure, which you need to verify on you system (We will show this in a couple of lines)
        callback_url: {{ $callback ?? route(config('moyasar.callback_url')) }},

        // Optional
        // Required payments methods
        // Default: ['creditcard', 'applepay', 'stcpay']
        methods: @json($methods ?? config('moyasar.methods')),
    })
</script>
