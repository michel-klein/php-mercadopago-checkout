<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed top-0 left-0 hidden w-1/2 h-full lg:block bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed top-0 right-0 hidden w-1/2 h-full lg:block bg-tertiary-800" aria-hidden="true">

        </div>
        <div class="relative grid grid-cols-1 mx-auto max-w-7xl lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section aria-labelledby="summary-heading" class="py-12 bg-tertiary-800 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>
                    <x-checkout.product-list>
                        <x-checkout.product-item
                        name="Teste"
                        price="210,00"
                        image="http://www.github.com/michel-klein.png"
                        :features="[
                            'White and black',
                            '15l'
                        ]"
                        />
                    </x-checkout.product-list>
                    <dl class="pt-6 space-y-6 text-sm font-medium border-t border-white border-opacity-10">
                        <x-checkout.summary-item title="Subtotal" value="570,00" />
                        <x-checkout.summary-item title="Frete" value="50,00" />
                        <x-checkout.summary-item title="Total" value="620,00" :is-last="true" />
                    </dl>
                </div>
            </section>
            <section
            aria-labelledby="payment-and-shipping-heading"
            class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informações de contato" />
                            <div class="mt-6">
                                <x-input-label for="email-address">
                                    E-mail
                                </x-input-label>
                                <div class="mt-1">
                                    <x-text-input
                                    type='email'
                                    id="email-address"
                                    name="email"
                                    autocomplete="email"
                                    placeholder="Digite seu e-mail" />
                                </div>
                            </div>
                            <div class="mt-10">
                                <x-section-title title="IDetalhes do pagamento" />
                                <div class="grid grid-cols-3 mt-6 gap-x-4 gap-y-6 sm:grid-cols-4">
                                    <div class="col-span-3 sm:col-span-4">
                                        <x-input-label for="card-number">
                                            Número do cartão
                                        </x-input-label>
                                        <div class="mt-1">
                                            <x-text-input
                                            type='text'
                                            id="card-number"
                                            name="card-number"
                                            placeholder="Número do cartão" />
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="card-number">
                                            Número do cartão
                                        </x-input-label>
                                        <div class="mt-1">
                                            <x-text-input
                                            type='text'
                                            id="card-number"
                                            name="card-number"
                                            placeholder="Número do cartão" />
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="expiration-date">
                                            Data de expiração
                                        </x-input-label>
                                        <div class="mt-1">
                                            <x-text-input
                                            type='text'
                                            id="expiration-date"
                                            name="expiration-date"
                                            placeholder="MM/AA" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

</x-app-layout>
