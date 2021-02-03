<x-guest-layout>
    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <x-notice-board :notices="$notices" />
            <x-form class="md:max-w-xl mx-auto" :action="route('withdraw')" method="POST">
                <x-input-group step="1" name="player_id" />
                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 flex flex-col bg-white shadow-md relative rounded-md mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">2</p>
                                <label for="currency">Select Currency</label>
                            </h2>
                            <select name="currency" id="currency" class="tail-select mt-2 w-64">
                                @foreach(explode(',', setting('currencies')) as $currency)
                                    @if($currency = trim($currency))
                                        <option value="{{ $currency }}" @if(old('$currency') == $currency) selected @endif>{{ $currency }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-error name="currency" />
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <x-input-group step="3" name="amount" />
                    </div>
                </div>
                <div class="flex flex-wrap md:-mx-2">
                    <div class="md:px-2 w-full md:w-1/2">
                        <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md md:w-50 mt-5">
                            <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                                <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">4</p>
                                <label for="payment-method">Payment Method</label>
                            </h2>
                            @inject('payment', 'App\Http\Livewire\Admin\PaymentSetting')
                            <select name="payment_method" id="payment-method" class="tail-select mt-2 w-64">
                                @foreach($payment->toArr() as $name => $number)
                                    <option data-description="{{ $number }}" value="{{ $name }}" @if(old('payment_method') == $name) selected @endif>{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="md:px-2 w-full md:w-1/2">
                        <x-input-group step="0" name="payment_number" />
                    </div>
                </div>
                <x-input-group step="5" name="withdrawal_code" />
                <x-input-group step="6" name="email" />

                <x-jet-button class="w-full justify-center mt-6 py-3">
                    Sell
                </x-jet-button>
            </x-form>
        </div>
    </div>
</x-guest-layout>
