<template>
    <div class="notification-overlay">
        <div class="notification-card">
            <h3 class="notification-title">Test Title</h3>
            <p class="notification-message">
                This is a test message for the Subscription Alert card.
            </p>
            <a href="/pay-subscription" class="notification-link">Pay Now</a>
        </div>
    </div>
</template>

<script>
export default {
    // No props needed for static test
};
</script>

<style>
.notification-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.notification-card {
    background: #333;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 400px;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.notification-title {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.notification-message {
    font-size: 1em;
    margin-bottom: 20px;
}

.notification-link {
    color: #4caf50;
    text-decoration: none;
    font-weight: bold;
}
</style>
