<x-guest-layout>
    <div class="overflow-hidden shadow-md">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <x-form class="md:max-w-xl mx-auto" :action="route('withdraw')" method="POST">
                <x-input-group step="1" name="player_id" />
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 flex flex-col bg-white shadow-md relative rounded-md md:w-50 md:mr-2 mb-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">2</p>
                            <label for="currency">Select Currency</label>
                        </h2>
                        <select name="currency" id="currency" class="tail-select mt-2 w-64">
                            <option value="USD">USD</option>
                            <option value="BDT">BDT</option>
                            <option value="EUR">EUR</option>
                        </select>
                        <x-error name="currency" />
                    </div>
                    <div class="md:w-50 flex-1">
                        <x-input-group step="3" name="amount" />
                    </div>
                </div>
                <div class="flex">
                    <div class="pt-7 pb-2 px-4 bg-white shadow-md relative rounded-md md:w-50 md:mr-2 mb-5">
                        <h2 class="flex bg-white py-1 px-2 rounded-md absolute left-0 -top-3">
                            <p class="mr-1 h-6 w-6 text-lg font-bold bg-redish text-white text-center rounded-md">4</p>
                            <label for="payment-method">Payment Method</label>
                        </h2>
                        <select name="payment_method" id="payment-method" class="tail-select mt-2 w-64">
                            <option value="bKash">bKash</option>
                            <option value="Rocket">Rocket</option>
                            <option value="Nagad">Nagad</option>
                        </select>
                    </div>
                    <div class="md:w-50 flex-1">
                        <x-input-group step="0" name="payment_number" />
                    </div>
                </div>
                <x-input-group step="5" name="withdrawal_code" />
                <x-input-group step="6" name="email" />
                <button type="submit" class="w-full rounded-md px-3 py-3 mt6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Sell
                </button>
            </x-form>
        </div>
    </div>
</x-guest-layout>
