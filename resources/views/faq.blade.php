<x-guest-layout>
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Frequently asked questions
                </h2>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-12">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            What are the main reasons to use a single database versus multiple databases?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Speed and simplicity. As you've seen, we setup the entire multi-tenancy design in under 30 minutes. In many cases your app is small enough (or you may even be building a prototype) that when it comes to multiple databases, <a href="https://martinfowler.com/bliki/Yagni.html" class="text-blue-500">YAGNI</a>.
                        </dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why don't you use a package that handles multi-tenancy for you?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            I want to fully understand how multi-tenancy works in my application. Understanding every detail of how it works is critical to truly understanding my application. Also, when I created my first Laravel SaaS in 2018, the multi tenancy package were much more limited than they are today.
                        </dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            Why do you use the session to store the tenant_id? Can't you just access it off the user?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            The main reason I use the session is because I want to create a super-admin user who can see a roll-up of all tenants and can impersonate users. For more information about that approach, see <a class="text-blue-500" href="https://laracasts.com/series/multitenancy-in-practice/episodes/9">lesson 9</a> and <a class="text-blue-500" href="https://laracasts.com/series/multitenancy-in-practice/episodes/10">lesson 10</a> in my Laracasts series.
                        </dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">
                            When would you opt for a multiple database design instead of a single database?
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            The biggest considerations for me are the scope of the application and sensitivity of the data.<br/><br/>

                            If you have thousands of tenants, and each tenant is inserting massive amounts of data into your tables, your queries could take a really long time in a single database even with good indexes.<br/><br/>

                            Also, if the nature of your app is to hold very sensitive data and/or to work with government customers or very large businesses, these customers will generally frown upon their data being in the same database as other customers. In these cases, you may lose business by taking a single database approach.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
