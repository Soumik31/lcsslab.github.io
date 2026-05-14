/**
 * Supabase Configuration and Auth Utilities for LCSS E-Commerce
 */
var SUPABASE_URL = 'https://hyjtjtjjnqpiimbotbry.supabase.co';
var SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imh5anRqdGpqbnFwaWltYm90YnJ5Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3Nzg3NDc2NDQsImV4cCI6MjA5NDMyMzY0NH0.OY-s4BJOJnVuuUxufusq3ysRIZRtCC0eTccKMYMT58o';

// Initialize client - store on window to avoid var hoisting issues
window.supabaseClient = window.supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

// All pages use 'supabase' variable to query - point it to the client
var supabase = window.supabaseClient;

function getCurrentUser() {
    return sessionStorage.getItem('lcss_user');
}

function getAdminUser() {
    return sessionStorage.getItem('lcss_admin');
}

function requireUserAuth() {
    if (!getCurrentUser()) {
        window.location.href = '../login.html';
    }
}

function requireAdminAuth() {
    if (!getAdminUser()) {
        window.location.href = 'adminlogin.html';
    }
}

function userLogout() {
    sessionStorage.removeItem('lcss_user');
    sessionStorage.removeItem('lcss_cart');
    window.location.href = '../index.html';
}

function adminLogout() {
    sessionStorage.removeItem('lcss_admin');
    window.location.href = '../index.html';
}

function getCart() {
    var cart = sessionStorage.getItem('lcss_cart');
    return cart ? JSON.parse(cart) : [];
}

function saveCart(cart) {
    sessionStorage.setItem('lcss_cart', JSON.stringify(cart));
}

function addToCart(productId) {
    var cart = getCart();
    if (cart.indexOf(productId) === -1) {
        cart.push(productId);
        saveCart(cart);
        return true;
    }
    return false;
}

function removeFromCart(productId) {
    var cart = getCart();
    var index = cart.indexOf(productId);
    if (index > -1) {
        cart.splice(index, 1);
        saveCart(cart);
    }
}

function getCartCount() {
    return getCart().length;
}

function showError(message) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-danger alert-dismissible fade show';
    alertDiv.innerHTML = message + '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    var container = document.querySelector('.container') || document.body;
    container.prepend(alertDiv);
}

function showSuccess(message) {
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-success alert-dismissible fade show';
    alertDiv.innerHTML = message + '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    var container = document.querySelector('.container') || document.body;
    container.prepend(alertDiv);
}
