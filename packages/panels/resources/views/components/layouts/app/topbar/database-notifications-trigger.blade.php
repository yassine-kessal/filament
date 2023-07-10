<x-filament::icon-button
    :label="__('filament::layout.actions.database_notifications.label')"
    icon="heroicon-o-bell"
    icon-alias="panels::topbar.open-database-notifications-button"
    icon-size="lg"
    color="gray"
    :indicator="$unreadNotificationsCount"
    class="-me-1 ms-4"
/>
