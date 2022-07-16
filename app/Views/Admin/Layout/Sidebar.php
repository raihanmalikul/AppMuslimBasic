<?php
$request = \Config\Services::request();
$segment = $request->uri->getSegments();
?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/admin/dashboard">
            <span class="align-middle">Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item <?php if ($segment[1] == 'dashboard') echo "active"; ?>">
                <a class="sidebar-link" href="/admin/dashboard">
                    <i class="fa-solid fa-gauge-high"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?php if ($segment[1] == 'allOrder' || $segment[1] == 'konfPay') echo "active"; ?>">
                <a data-bs-target="#orders" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-cart-arrow-down"></i> <span class="align-middle">Order</span>
                </a>
                <ul id="orders" class="sidebar-dropdown list-unstyled collapse <?php if ($segment[1] == 'allOrder' || $segment[1] == 'konfPay') echo "show"; ?>" data-bs-parent="#orders">
                    <li class="sidebar-item <?php if ($segment[1] == 'allOrder') echo "active"; ?>"><a class="sidebar-link" href="/admin/allOrder">All Order</a></li>
                    <li class="sidebar-item <?php if ($segment[1] == 'konfPay') echo "active"; ?>"><a class="sidebar-link" href="/admin/konfPay">Konfirmasi Pembayaran</a></li>
                </ul>
            </li>
            
            <li class="sidebar-item <?php if ($segment[1] == 'allProduk' || $segment[1] == 'inventaris' || $segment[1] == 'kategori') echo "active"; ?>">
                <a data-bs-target="#products" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping"></i> <span class="align-middle">Produk</span>
                </a>
                <ul id="products" class="sidebar-dropdown list-unstyled collapse <?php if ($segment[1] == 'allProduk' || $segment[1] == 'inventaris' || $segment[1] == 'kategori') echo "show"; ?>" data-bs-parent="#products">
                    <li class="sidebar-item <?php if ($segment[1] == 'allProduk') echo "active"; ?>"><a class="sidebar-link" href="/admin/allProduk">All Produk</a></li>
                    <li class="sidebar-item <?php if ($segment[1] == 'inventaris') echo "active"; ?>"><a class="sidebar-link" href="/admin/inventaris">Inventaris</a></li>
                    <li class="sidebar-item <?php if ($segment[1] == 'kategori') echo "active"; ?>"><a class="sidebar-link" href="/admin/kategori">Kategori</a></li>
                </ul>
            </li>
            
            <li class="sidebar-item <?php if ($segment[1] == 'customerMData' || $segment[1] == 'historyOrder') echo "active"; ?>">
                <a data-bs-target="#customers" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-user-group"></i> <span class="align-middle">Customer</span>
                </a>
                <ul id="customers" class="sidebar-dropdown list-unstyled collapse <?php if ($segment[1] == 'customerMData' || $segment[1] == 'historyOrder') echo "show"; ?>" data-bs-parent="#customers">
                    <li class="sidebar-item <?php if ($segment[1] == 'customerMData') echo "active"; ?>"><a class="sidebar-link" href="/admin/customerMData">Master Data</a></li>
                    <li class="sidebar-item <?php if ($segment[1] == 'historyOrder') echo "active"; ?>"><a class="sidebar-link" href="/admin/historyOrder">History Order</a></li>
                </ul>
            </li>
            
            <li class="sidebar-item <?php if ($segment[1] == 'lprPenjualan' || $segment[1] == 'lprPengiriman') echo "active"; ?>">
                <a data-bs-target="#reports" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="fa-solid fa-list"></i> <span class="align-middle">Report</span>
                </a>
                <ul id="reports" class="sidebar-dropdown list-unstyled collapse <?php if ($segment[1] == 'lprPenjualan' || $segment[1] == 'lprPengiriman') echo "show"; ?>" data-bs-parent="#reports">
                    <li class="sidebar-item <?php if ($segment[1] == 'lprPenjualan') echo "active"; ?>"><a class="sidebar-link" href="/admin/lprPenjualan">Penjualan</a></li>
                    <li class="sidebar-item <?php if ($segment[1] == 'lprPengiriman') echo "active"; ?>"><a class="sidebar-link" href="/admin/lprPengiriman">Pengiriman</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>