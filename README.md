
# **Quick Note - A Filament Plugin**  

**Quick Note** is a Filament plugin that allows users to create and manage quick notes with categories and images.  

## **Features**  
✅ Create, edit, and delete notes  
✅ Organize notes into categories  
✅ Upload images for notes and categories  
✅ User-based note management  

## **Installation**  

```sh
composer require gokulsingh/quick-note
```

### **Publish Migrations & Assets**  

```sh
php artisan vendor:publish --tag=quick-note-migrations
php artisan migrate
```

## **Usage**  

### **Register the Plugin in Filament Panel**  

In your `PanelProvider.php`, add:  

```php
use Gokulsingh\QuickNote\QuickNotePlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            QuickNotePlugin::make()->role('admin')
        ]);
}
```

## **Database Structure**  

### **Notes Table**
| Column | Type | Description |
|---------|------|------------|
| id | int | Primary Key |
| title | string | Note title |
| description | text | Note content |
| image | string | Note image (optional) |
| notes_category_id | foreignId | Linked to `notes_categories` |
| user_id | foreignId | Linked to `users` |
| created_at | timestamp | Timestamp |

### **Notes Categories Table**
| Column | Type | Description |
|---------|------|------------|
| id | int | Primary Key |
| name | string | Category name |
| description | text | Category description |
| image | string | Category image |
| created_at | timestamp | Timestamp |

## **Screenshots**  
🚀 Coming soon!  

## **Contributing**  
Feel free to submit issues and pull requests to improve the plugin!  

## **Support My Work ❤️**  
If you find this plugin useful, consider supporting me:  

☕ [Buy Me a Coffee](https://buymeacoffee.com/preciousgariya)  

## **License**  
This package is open-source and licensed under the [MIT License](LICENSE).  
