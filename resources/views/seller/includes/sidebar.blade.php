<aside class="left-sidebar pad-top-100">
    <div class="scroll-sidebar">            
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li><a class="waves-effect waves-dark active" href="{{URL::to('seller')}}">Dashboard </a></li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">Products </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{URL::to('seller/all-products')}}">All Products</a></li>
                        <li><a href="{{URL::to('seller/add-product')}}">Add Product</a></li>
                        <li><a href="{{URL::to('seller/create-attribute')}}">Create Attribute</a></li>
                    </ul>
                </li>
                <li><a class="waves-effect waves-dark" href="{{URL::to('seller/transaction')}}">Transaction </a></li>
                <li><a class="waves-effect waves-dark" href="{{URL::to('seller/manage-shipping')}}">Manage Shipping </a></li>
                <li><a class="waves-effect waves-dark" href="{{URL::to('seller/order-history')}}">Order History </a></li>
            </ul>
        </nav>
    </div>
</aside>
