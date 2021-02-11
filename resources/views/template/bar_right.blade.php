<div class="right c-sidebar c-sidebar-right c-sidebar-dark c-sidebar-fixed c-sidebar-md-show" id="sidebarright">
  <div class="c-sidebar-brand d-lg-down-none">
    <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="assets/brand/coreui.svg#full"></use>
    </svg>
    <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="assets/brand/coreui.svg#signet"></use>
    </svg>
  </div>
  <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-title">Makanan
    <li id="item_menu" class="c-sidebar-nav-item">Menu
      <p>Jumlah : 2</p>
    </li>
    <li id="item_menu" class="c-sidebar-nav-item">Menu2
      <p>Jumlah : 8</p>
    </li>

    </li>
    <li class="c-sidebar-nav-title">Minuman</li>
    <li id="item_menu" class="c-sidebar-nav-item">Menu
      <p>Jumlah : 2</p>
    </li>
    <li id="item_menu" class="c-sidebar-nav-item">Menu2
      <p>Jumlah : 8</p>
    </li>
  </ul>
  <ul class="c-sidebar-nav" style="height:50px;">
    <li class="c-sidebar-nav-title">Total</li>
    <li style="display: flex; justify-content: flex-end;     padding-left: 15px;
    padding-right: 15px;
    padding-top: 8px;
    padding-bottom: 8px;" class="c-sidebar-nav-item">Rp.340.000</li>

    <li class="c-sidebar-nav-title">Pembayaran</li>
    <li style="display: flex; justify-content: flex-end;" class="c-sidebar-nav-item">
      <div class="input-group mb-3">

        <select class="custom-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Cash</option>
          <option value="2">Transfer</option>
          <option value="3">Credit Card</option>
        </select>
      </div>
    </li>
  </ul>

  <button type="button" class="btn btn-success"><span class="cil-contrast btn-icon mr-2"></span> Checkout</button>
</div>


<style>
  #item_menu {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 8px;
    padding-bottom: 8px;
    align-items: center;
    justify-content: space-between;
    display: flex;
  }
</style>