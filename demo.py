import re

class ArticleManager:
    def __init__(self, article_text, options=None):
        # Validate input type for article_text
        if not isinstance(article_text, str):
            raise ValueError("Article text must be a string.")
        
        # Default options if none provided
        if options is None:
            options = {}
        
        # Initialize article and options
        self.article_text = article_text
        self.pages = []
        self.words = []
        self.options = {
            'words_per_line': options.get('words_per_line', 12),
            'lines_per_page': options.get('lines_per_page', 20),
            'payment_structure': options.get('payment_structure', {
                1: 30,
                2: 30,
                3: 60,
                4: 60,
                'default': 100,
            })
        }

    def split_into_pages(self):
        words_per_line = self.options['words_per_line']
        lines_per_page = self.options['lines_per_page']
        
        # Split article into words, handling multiple spaces
        self.words = self.article_text.strip().split()
        
        # Group words into lines
        lines = [' '.join(self.words[i:i + words_per_line]) 
                 for i in range(0, len(self.words), words_per_line)]
        
        # Group lines into pages
        self.pages = ['\n'.join(lines[i:i + lines_per_page]) 
                      for i in range(0, len(lines), lines_per_page)]

    def calculate_payment(self):
        payment_structure = self.options['payment_structure']
        total_pages = len(self.pages)

        # Payment logic based on ranges
        if total_pages < 1:
            return 0
        elif 1 <= total_pages <= 2:
            return 30
        elif 3 <= total_pages <= 4:
            return 60
        else:
            return payment_structure.get('default', 100)

    def display_pages(self):
        payment = self.calculate_payment()

        # Display summary
        print(f"Total Pages: {len(self.pages)}")
        print(f"Payment Due: ${payment}")
        
        # Display each page
        for idx, page in enumerate(self.pages, start=1):
            print(f"\nPage {idx}:\n{page}")

    def process_article(self):
        # Process and display article pages
        self.split_into_pages()
        self.display_pages()

# Example usage
if __name__ == "__main__":
    article_text = """Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore 
    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
    laborum."""
    
    options = {
        'words_per_line': 12,
        'lines_per_page': 20,
        'payment_structure': {
            1: 30,
            2: 30,
            3: 60,
            4: 60,
            'default': 100,
        }
    }
    
    article_manager = ArticleManager(article_text, options)
    article_manager.process_article()