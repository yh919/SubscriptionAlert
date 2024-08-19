<template>
  <div class="card relative">
    <div v-if="notification" class="notification-content">
      <h3 class="notification-title">{{ notification.title }}</h3>
      <p class="notification-message">
        {{ notification.message }}
      </p>
      <a
        v-if="notification.payUrl"
        :href="notification.payUrl"
        class="notification-link"
        >Pay Now</a
      >
    </div>
  </div>
</template>

<script>
export default {
  props: ["card"], // Use "card" prop to match Nova naming conventions
  data() {
    return {
      notification: this.card, // Bind card prop to notification object
    };
  },
};
</script>

<style>
.card {
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  color: #333;
}

.notification-content {
  text-align: center;
}

.notification-title {
  font-size: 1.25em;
  margin-bottom: 10px;
  color: #333;
}

.notification-message {
  font-size: 1em;
  margin-bottom: 20px;
  color: #666;
}

.notification-link {
  color: #4caf50;
  text-decoration: none;
  font-weight: bold;
}
</style>
