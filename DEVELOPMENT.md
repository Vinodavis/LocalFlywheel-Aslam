# WordPress Development Environment Setup

## Overview
This is a WordPress development environment set up with Local by Flywheel, VS Code, and Claude Code integration for enhanced development and improvement work.

## Environment Details
- **WordPress Site**: aslamfiretest
- **Local Environment**: Local by Flywheel
- **IDE**: Visual Studio Code with WordPress-specific extensions
- **AI Assistant**: Claude Code integration
- **Version Control**: Git repository initialized

## Quick Start

### 1. Open the Project
```bash
# Open VS Code with the workspace
code LocalFlywheel-Aslam.code-workspace
```

### 2. Start Local Development Server
- Open Local by Flywheel application
- Start the "aslamfiretest" site
- The site will be available at your local URL

### 3. Development Workflow

#### Sync Files Between Local and Development Directory
Use the built-in VS Code tasks:
- **Ctrl+Shift+P** → "Tasks: Run Task"
- Choose "WordPress: Sync from Local" to pull changes
- Choose "WordPress: Sync to Local" to push changes

#### Manual Sync Commands
```bash
# Sync FROM Local to development directory
rsync -av --exclude=wp-config.php ~/Local\ Sites/aslamfiretest/app/public/ ./

# Sync TO Local from development directory
rsync -av --exclude=wp-config.php ./ ~/Local\ Sites/aslamfiretest/app/public/
```

## VS Code Configuration

### Recommended Extensions
The workspace includes recommendations for:
- **Intelephense**: PHP language server for WordPress
- **Claude Code**: AI-powered development assistance
- **WordPress Hooks**: WordPress-specific code helpers
- **Auto Rename Tag**: HTML/PHP tag editing
- **PHP Debug**: Xdebug integration
- **Prettier**: Code formatting

### Key Features Configured
- PHP validation using Local's PHP installation
- WordPress-specific file associations
- Intelligent file exclusions (wp-admin, wp-includes)
- Emmet support for PHP files
- Claude Code status line integration
- Xdebug debugging setup

## Directory Structure
```
LocalFlywheel-Aslam/
├── .vscode/                    # VS Code configuration
│   ├── settings.json          # Workspace settings
│   ├── extensions.json        # Recommended extensions
│   ├── launch.json           # Debug configuration
│   └── tasks.json            # Build/sync tasks
├── .git/                      # Git repository
├── .gitignore                # Git ignore patterns
├── wp-content/               # WordPress content directory
│   ├── themes/              # Custom themes
│   ├── plugins/             # Custom plugins
│   └── uploads/             # Media files (ignored by git)
├── wp-admin/                # WordPress admin (ignored by search)
├── wp-includes/             # WordPress core (ignored by search)
├── wp-config.php            # WordPress configuration (ignored by git)
└── LocalFlywheel-Aslam.code-workspace  # VS Code workspace file
```

## Git Workflow

### Initial Setup Complete
- Git repository initialized
- Comprehensive .gitignore configured
- Initial commit with WordPress core files

### Recommended Git Workflow
```bash
# Create feature branches for development
git checkout -b feature/new-enhancement

# Make your changes, then stage and commit
git add .
git commit -m "Add new enhancement feature"

# Push to remote repository (after GitHub setup)
git push origin feature/new-enhancement
```

## GitHub Integration

### To Connect with GitHub:
1. Install GitHub CLI:
   ```bash
   brew install gh
   ```

2. Login to GitHub:
   ```bash
   gh auth login
   ```

3. Create repository:
   ```bash
   gh repo create LocalFlywheel-Aslam --public --source=. --remote=origin --push
   ```

## Claude Code Integration

### Features Available
- AI-powered code assistance
- Intelligent refactoring suggestions
- WordPress-specific development help
- Code explanation and documentation
- Status line integration showing current file info

### Usage Tips
- Use Claude Code for WordPress best practices
- Ask for plugin/theme development guidance
- Request code reviews and improvements
- Get help with WordPress hooks and filters

## Development Best Practices

### File Organization
- Keep custom themes in `wp-content/themes/`
- Store custom plugins in `wp-content/plugins/`
- Use version control for all custom code
- Exclude WordPress core files from custom modifications

### Security Considerations
- Never commit wp-config.php with sensitive data
- Use environment variables for database credentials
- Keep WordPress core updated through Local by Flywheel
- Regular security audits of custom code

### Performance Optimization
- Optimize images before uploading
- Minify CSS and JavaScript in production
- Use caching plugins appropriately
- Monitor database queries in custom code

## Debugging

### Xdebug Setup
- Configured for port 9003
- Path mappings set for Local by Flywheel
- Use VS Code debug panel to start debugging sessions

### WordPress Debug Mode
Add to wp-config.php for development:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

## Maintenance Tasks

### Regular Updates
- Keep WordPress core updated via Local by Flywheel
- Update plugins and themes regularly
- Review and update development dependencies

### Backup Strategy
- Git repository serves as code backup
- Export database regularly from Local by Flywheel
- Consider automated backup solutions for production

## Troubleshooting

### Common Issues
1. **File sync problems**: Use manual rsync commands
2. **PHP errors**: Check Local by Flywheel logs
3. **Extension conflicts**: Disable conflicting VS Code extensions
4. **Debugging not working**: Verify Xdebug configuration

### Support Resources
- WordPress Developer Documentation
- Local by Flywheel Support
- VS Code Documentation
- Claude Code Documentation

---

**Happy WordPress Development!** 🚀